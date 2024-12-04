@csrf
<label for="name">name</label>
<input type="text" name="name" id="name" value="{{ old('name',$product->name ?? '')  }}">

<label for="description">description</label>
<textarea name="description" id="description">{{ old('description',$product->description ?? '') }}</textarea>

<label for="size">size</label>
<input type="text" name="size" id="size" value="{{ old('size',$product->size ?? '') }}">

<button>save</button>