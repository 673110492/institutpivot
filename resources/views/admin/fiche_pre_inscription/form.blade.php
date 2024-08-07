<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($fiche->nom) ? $fiche->nom : old('nom') }}"
                        placeholder="Expert fiche" />
                    <label for="nom">{{ __('nom') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>
                 <div class="form-floating mb-3">
                    <input accept=".pdf" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($fiche->photo) ? $fiche->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">photo de la fiche<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
    </div>
</div>

