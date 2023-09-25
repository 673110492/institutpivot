<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo2" name="photo2" type="file"
                        value="{{ isset($apropos->photo2) ? $apropos->photo2 : old('photo2') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo2">Photo d'en apropos<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo2', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($apropos->photo) ? $apropos->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo descriptive<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="titre" name="titre" type="text"
                        value="{{ isset($apropos->titre) ? $apropos->titre : old('titre') }}"
                        placeholder="Expert apropos" />
                    <label for="titre">{{ __('titre') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('titre', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="mb-3">
                    <label for="ville">{{ __('Contenu') }} <span style="color:red">*</span></label>
                    <textarea class="form-control" id="div_editor1" required name="contenu" type="contenu" value=""
                        placeholder="Dschang">{{ isset($apropos->contenu) ? $apropos->contenu : old('contenu') }}</textarea>
                    <span style="color: red">{!! $errors->first('contenu', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
    </div>
</div>

