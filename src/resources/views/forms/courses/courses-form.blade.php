    <div class="row mt-3">
        <div class="col-12">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" placeholder="Digite o titulo do curso aqui" maxlength="80" value="{{isset($data->title) && !empty($data->title) ? $data->title : ''}}" id="title" name="title" required>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-12">
            <div class="form-group">
                <label class="form-label">Descrição</label>
                <textarea class="form-control" none="true" placeholder="Digite a descrição do curso aqui" name="description" id="description"  style="height:150px" required={{isset($data->description) && !empty($data->description) ? $data->description : ''}}></textarea>
            </div>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col-6">
            <div class="form-group">
                <label class="form-label">Imagem</label>
                <input type="file" class="form-control" placeholder="aaa" id="file" name="image"   {{isset($data->image) && !empty($data->image) ? '' : 'required' }}>
                <img type="image" src="{{isset($data->image) && !empty($data->image) ? asset($data->image) : '' }}" class="{{isset($data->image) && !empty($data->image) ? '' : 'd-none' }}" width="300px">
               
            </div>
        </div>
        <div class="col-6">
            <label class="form-label">Valor</label>
            <input type="number" class="form-control" id="value" name="value" value="{{isset($data->value) && !empty($data->value) ? $data->value : ''}}" placeholder="Digite o valor do curso aqui" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" checked="{{isset($data->published) && !empty($data->published) ? true : false}}" type="checkbox" name="published"  id="published" required>
                <label class="form-check-label">Publicado</label>
            </div>
        </div>
    </div>
        
