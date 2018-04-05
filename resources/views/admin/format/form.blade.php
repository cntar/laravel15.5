
<form method="post" action = "store" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="name1" name = "name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="descr" name = "description" placeholder="Description">
    </div>
     <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name = "price" placeholder="Price of iterm">
    </div>
    <div class="form-group">
        <select name = "size" class="form-control">
        <label for="size">size</label>
            <option value="">Select size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
    </div>
    <div class="form-group">
         <select name = "catName" class = "form-control">
        <label for="catName">Category name</label>
             <option value="">Select categories</option>
             <option value="1">accessories</option>
             <option value="2">kinyago</option>
             <option value="3">home decor</option>
             <option value="3">TingaTinga pictures</option>
             <option value="3">Casual wear</option>
         </select>
    </div>
    <div class="form-group">
        <label for="image">input destination image</label><br>
        <br>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name = 'submit'>Submit</button>
</form>

