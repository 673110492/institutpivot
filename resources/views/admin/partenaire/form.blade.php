<div class="card-body bg-white">
    <div class="tab-content">
        <!-- Champ pour le nom -->
        <div class="form-floating mb-3">
            <input class="form-control" required id="nom" name="nom" type="text"
                value="{{ isset($apropos->nom) ? $apropos->nom : old('nom') }}"
                placeholder="Nom" />
            <label for="nom">{{ __('Nom') }} <span style="color:red">*</span></label>
            <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
        </div>

        <!-- Champ pour l'email -->
        <div class="form-floating mb-3">
            <input class="form-control" required id="email" name="email" type="email"
                value="{{ isset($apropos->email) ? $apropos->email : old('email') }}"
                placeholder="Email" />
            <label for="email">{{ __('Email') }} <span style="color:red">*</span></label>
            <span style="color: red">{!! $errors->first('email', '<p class="help-block">:message</p>') !!}</span>
        </div>

        <!-- Champ pour le téléphone -->
        <div class="form-floating mb-3">
            <input class="form-control" id="telephone" name="telephone" type="text"
                value="{{ isset($apropos->telephone) ? $apropos->telephone : old('telephone') }}"
                placeholder="(237) XXX XX XX XX" />
            <label for="telephone">{{ __('Téléphone') }}</label>
            <span style="color: red">{!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}</span>
        </div>



        <!-- Champ pour l'image -->
        <div class="form-floating mb-3">
            <input accept=".jpeg,.png,.jpg" class="form-control" id="image" name="image" type="file"
                value="{{ isset($apropos->image) ? $apropos->image : old('image') }}" />
            <label for="image">{{ __('Image') }}</label>
            <span style="color: red">{!! $errors->first('image', '<p class="help-block">:message</p>') !!}</span>
        </div>

        <!-- Champ pour le titre -->
        <div class="form-floating mb-3">
            <input class="form-control" required id="titre" name="titre" type="text"
                value="{{ isset($apropos->titre) ? $apropos->titre : old('titre') }}"
                placeholder="Titre" />
            <label for="titre">{{ __('Titre') }} <span style="color:red">*</span></label>
            <span style="color: red">{!! $errors->first('titre', '<p class="help-block">:message</p>') !!}</span>
        </div>

        
    </div>
</div>
