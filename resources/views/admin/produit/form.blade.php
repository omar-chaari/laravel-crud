<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($produit->id) ? $produit->id : ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="control-label">{{ 'Code' }}</label>
    <input class="form-control" name="code" type="text" id="code" value="{{ isset($produit->code) ? $produit->code : ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reference') ? 'has-error' : ''}}">
    <label for="reference" class="control-label">{{ 'Reference' }}</label>
    <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($produit->reference) ? $produit->reference : ''}}" >
    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($produit->description) ? $produit->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('delais_jour') ? 'has-error' : ''}}">
    <label for="delais_jour" class="control-label">{{ 'Delais Jour' }}</label>
    <textarea class="form-control" rows="5" name="delais_jour" type="textarea" id="delais_jour" >{{ isset($produit->delais_jour) ? $produit->delais_jour : ''}}</textarea>
    {!! $errors->first('delais_jour', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('garantie_mois') ? 'has-error' : ''}}">
    <label for="garantie_mois" class="control-label">{{ 'Garantie Mois' }}</label>
    <textarea class="form-control" rows="5" name="garantie_mois" type="textarea" id="garantie_mois" >{{ isset($produit->garantie_mois) ? $produit->garantie_mois : ''}}</textarea>
    {!! $errors->first('garantie_mois', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serv_ap_vnt') ? 'has-error' : ''}}">
    <label for="serv_ap_vnt" class="control-label">{{ 'Serv Ap Vnt' }}</label>
    <textarea class="form-control" rows="5" name="serv_ap_vnt" type="textarea" id="serv_ap_vnt" >{{ isset($produit->serv_ap_vnt) ? $produit->serv_ap_vnt : ''}}</textarea>
    {!! $errors->first('serv_ap_vnt', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prix') ? 'has-error' : ''}}">
    <label for="prix" class="control-label">{{ 'Prix' }}</label>
    <input class="form-control" name="prix" type="number" id="prix" value="{{ isset($produit->prix) ? $produit->prix : ''}}" >
    {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($produit->nom) ? $produit->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('qte') ? 'has-error' : ''}}">
    <label for="qte" class="control-label">{{ 'Qte' }}</label>
    <input class="form-control" name="qte" type="number" id="qte" value="{{ isset($produit->qte) ? $produit->qte : ''}}" required>
    {!! $errors->first('qte', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('index_prod') ? 'has-error' : ''}}">
    <label for="index_prod" class="control-label">{{ 'Index Prod' }}</label>
    <input class="form-control" name="index_prod" type="number" id="index_prod" value="{{ isset($produit->index_prod) ? $produit->index_prod : ''}}" >
    {!! $errors->first('index_prod', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fodec') ? 'has-error' : ''}}">
    <label for="fodec" class="control-label">{{ 'Fodec' }}</label>
    <input class="form-control" name="fodec" type="number" id="fodec" value="{{ isset($produit->fodec) ? $produit->fodec : ''}}" >
    {!! $errors->first('fodec', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tva') ? 'has-error' : ''}}">
    <label for="tva" class="control-label">{{ 'Tva' }}</label>
    <input class="form-control" name="tva" type="number" id="tva" value="{{ isset($produit->tva) ? $produit->tva : ''}}" >
    {!! $errors->first('tva', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="created_at" type="datetime-local" id="created_at" value="{{ isset($produit->created_at) ? $produit->created_at : ''}}" >
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}}">
    <label for="updated_at" class="control-label">{{ 'Updated At' }}</label>
    <input class="form-control" name="updated_at" type="datetime-local" id="updated_at" value="{{ isset($produit->updated_at) ? $produit->updated_at : ''}}" >
    {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($produit->user_id) ? $produit->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
