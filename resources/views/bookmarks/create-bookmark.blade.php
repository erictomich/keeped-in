<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new bookmark</title>
    <style>
        .campos {
            width: 500px;
        }
        .campos > div {
            display: flex;
            margin: 10px;
            
        }
        .campos > div > label {
            width: 150px;
            text-align: right;
            padding: 0px 10px;
            
        }
        .container-botao {
            padding: 30px;
            flex-direction: row;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Create a new bookmark</h1>

    <form method="POST" action="/my-bookmarks">
        @csrf
        <div class="campos">
            <div><label for="Title">Title</label><input type="text" name="title"></div>
            <div><label for="Description">Description</label><input type="text" name="description"></div>
            <div><label for="URL">URL</label><input type="text" name="url"></div>
            <div><label for="Code share">Code share</label><input type="text" name="code"></div>
            <div><label for="TAGS">TAGS</label><input type="text" name="tags"></div>
            <div><label for="Type">Type</label>
                <select name="type">
                    <option value=""></option>
                    <option value="1">LinkedIn</option>
                    <option value="2">YouTube</option>
                </select>
            </div>
            <div class="container-botao"><button type="submit">Salvar</button></div>
        </div>
        
    </form>
</body>
</html>