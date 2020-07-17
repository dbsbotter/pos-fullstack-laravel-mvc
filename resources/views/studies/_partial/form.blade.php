@csrf
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label>Descrição</label>
            <input name="description" value="{{ isset($study) ? $study->description : '' }}" type="text" class="form-control" placeholder="Descrição">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label>Área</label>
            <select name="area_id" class="form-control">
                @if(isset($areas))
                @foreach($areas as $area)
                @if(isset($study) && $study->area_id == $area->id)
                <option value="{{ $area->id }}" selected>
                    {{ $area->description }}
                </option>
                @else
                <option value="{{ $area->id }}">
                    {{ $area->description }}
                </option>
                @endif
                @endforeach
                @else
                <option value="" selected>Nenhuma área encontrada</option>
                @endif
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label>Data inicial</label>
            <input name="date_init" value="{{ isset($study) ? $study->date_init : '' }}" type="date" class="form-control" placeholder="Data inicial">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label>Data final</label>
            <input name="date_finish" value="{{ isset($study) ? $study->date_finish : '' }}" type="date" class="form-control" placeholder="Data Final">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Finalizado" {{ isset($study) && $study->status == 'Finalizado' ? 'selected' : ''  }}>Finalizado
                </option>
                <option value="Em atraso" {{ isset($study) && $study->status == 'Em atraso' ? 'selected' : ''  }}>Em atraso</option>
                <option value="Em andamento" {{ !isset($study) ? "selected" : "" }} {{ isset($study) && $study->status == 'Em andamento' ? 'selected' : ''  }}>Em andamento</option>
            </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary float-right">Salvar</button>
