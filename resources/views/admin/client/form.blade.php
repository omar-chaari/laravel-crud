
<div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
    <label for="adresse" class="control-label">{{ 'Adresse' }}</label>
    <textarea class="form-control" rows="1" name="adresse" type="textarea" id="adresse" >{{ isset($client->adresse) ? $client->adresse : ''}}</textarea>
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('raison_social') ? 'has-error' : ''}}">
    <label for="raison_social" class="control-label">{{ 'Raison Social' }}</label>
    <input class="form-control" name="raison_social" type="text" id="raison_social" value="{{ isset($client->raison_social) ? $client->raison_social : ''}}" >
    {!! $errors->first('raison_social', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('code_tva') ? 'has-error' : ''}}">
    <label for="code_tva" class="control-label">{{ 'Code Tva' }}</label>
    <input class="form-control" name="code_tva" type="text" id="code_tva" value="{{ isset($client->code_tva) ? $client->code_tva : ''}}" >
    {!! $errors->first('code_tva', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($client->email) ? $client->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('list_tel') ? 'has-error' : ''}}">
    <label for="list_tel" class="control-label">{{ 'List Tel' }}</label>
    <input class="form-control" name="list_tel" type="text" id="list_tel" value="{{ isset($client->list_tel) ? $client->list_tel : ''}}" >
    {!! $errors->first('list_tel', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('data_fact') ? 'has-error' : ''}}">
    <label for="data_fact" class="control-label">{{ 'Data Fact' }}</label>
    <textarea class="form-control" rows="5" name="data_fact" type="textarea" id="data_fact" >{{ isset($client->data_fact) ? $client->data_fact : ''}}</textarea>
    {!! $errors->first('data_fact', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
