<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($contact->photo) ? $contact->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo d'en tete<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="adresse" name="adresse" type="text"
                        value="{{ isset($contact->adresse) ? $contact->adresse : old('adresse') }}"
                        placeholder="Expert contact" />
                    <label for="adresse">{{ __('Adresse') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="tel" name="tel" type="tel" maxlength="9" minlength="9"
                        value="{{ isset($contact->tel) ? $contact->tel : old('tel') }}"
                        placeholder="Expert contact" />
                    <label for="tel">{{ __('Numero de telephone') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('tel', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="email" name="email" type="email"
                        value="{{ isset($contact->email) ? $contact->email : old('email') }}"
                        placeholder="Expert contact" />
                    <label for="email">{{ __('Adresse email') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('email', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="site" name="site" type="text"
                        value="{{ isset($contact->site) ? $contact->site : old('site') }}"
                        placeholder="Expert contact" />
                    <label for="site">{{ __('Lien du site web') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('site', '<p class="help-block">:message</p>') !!}</span>
                </div>
    </div>
</div>

