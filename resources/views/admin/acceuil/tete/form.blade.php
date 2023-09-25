<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="titre" name="titre" type="text"
                        value="{{ isset($tete->titre) ? $tete->titre : old('titre') }}"
                        placeholder="Expert tete" />
                    <label for="titre">{{ __('titre') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('titre', '<p class="help-block">:message</p>') !!}</span>
                </div>
                 <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($tete->photo) ? $tete->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>

    </div>
</div>

