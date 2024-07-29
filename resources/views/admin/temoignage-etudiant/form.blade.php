<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($temoignage->nom) ? $temoignage->nom : old('nom') }}"
                        placeholder="Expert temoignage" />
                    <label for="nom">{{ __('Nom complet') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>
                 <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg"  class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($temoignage->photo) ? $temoignage->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo de l'etudiant<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <select name="formation_id" id="formation_id js-example-basic-single" class="form-select">
                        <option value="" disabled selected>Choisir la formation de l'etudiant</option>
                        @foreach($formations as $item)
                        <option value="{{$item->id}}" @if( isset($temoignage) && $item->id == $temoignage->formation_id) selected @endif>
                            {{$item->nom}}
                        </option>
                        @endforeach
                    </select>
                    <label for="formation_id" class="control-label">{{ 'Formateur responsable' }}<span style="color:red">*</span></label>
                    {!! $errors->first('formation_id', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" name="description">{{ isset($temoignage->description) ? $temoignage->description : old('description') }}</textarea>
                    <label for="description">{{ __('Contenu') }}</label>
                    <span style="color: red">{!! $errors->first('description', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>

    </div>
</div>

