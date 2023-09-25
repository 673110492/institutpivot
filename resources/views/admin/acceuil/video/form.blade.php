<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="titre" name="titre" type="text"
                        value="{{ isset($video->titre) ? $video->titre : old('titre') }}"
                        placeholder="Expert video" />
                    <label for="titre">{{ __('Titre') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('titre', '<p class="help-block">:message</p>') !!}</span>
                </div>
                 <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($video->photo) ? $video->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo de fond<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                 <div class="form-floating mb-3">
                    <input class="form-control" id="video" accept=".mp4" name="video" type="file"
                        value="{{ isset($video->video) ? $video->video : old('video') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="video">Video<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('video', '<p class="help-block">:message</p>') !!}</span>
                </div>

    </div>
</div>

