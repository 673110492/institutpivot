<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($pre_inscriptions->nom) ? $pre_inscriptions->nom : old('nom') }}"
                        placeholder="Expert formation" />
                    <label for="nom">{{ __('Nom') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="prenom" name="prenom" type="text"
                        value="{{ isset($pre_inscriptions->prenom) ? $pre_inscriptions->prenom : old('prenom') }}"
                        placeholder="Expert formation" />
                    <label for="prenom">{{ __('Prenom') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <select name="sexe" id="">
                        <option disabled value="">Choisir votre sexe</option>
                        <option value="F" @if( isset($pre_inscriptions) && $pre_inscriptions->sexe == "F") selected @endif>Féminin</option>
                        <option value="M" @if( isset($pre_inscriptions) && $pre_inscriptions->sexe == "M") selected @endif>Masculin</option>
                    </select>
                    <label for="sexe">{{ __('Sexe') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" required id="email" name="email" type="email"
                        value="{{ isset($pre_inscriptions->email) ? $pre_inscriptions->email : old('email') }}"
                        placeholder="Expert formation" />
                    <label for="email">{{ __('Email') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('email', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="telephone" name="telephone" required type="tel"
                        value="{{ isset($pre_inscriptions->telephone) ? $pre_inscriptions->telephone : old('telephone') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('Telephone') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('telephone', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <select onchange="change()" name="type_formation_id" id="type_formation_id" class="form-select">
                        <option value="" selected>Choisir le type de formation</option>
                        @foreach($type_formations as $item)
                        <option value="{{$item->id}}" @if( isset($pre_inscriptions) && $item->id == $pre_inscriptions->type_formation_id) selected @endif>
                            {{$item->nom}}
                        </option>
                        @endforeach
                    </select>
                    <label for="type_formation_id" class="control-label">{{ 'Type de la Formation' }}<span style="color:red">*</span></label>
                    {!! $errors->first('type_formation_id', '<p class="help-block">:message</p>') !!}
                </div>

                {{-- <div class="form-floating mb-3">
                    <select name="formation_id" id="form" class="form-select">
                        <option value="" disabled selected>Choisir la formation</option>

                    </select>
                    <label for="formation_id" class="control-label">{{ 'Liste formation ' }}<span style="color:red">*</span></label>
                    {!! $errors->first('formation_id', '<p class="help-block">:message</p>') !!}
                </div> --}}

</div>
</div>

