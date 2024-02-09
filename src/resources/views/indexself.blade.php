<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todo</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Todo
      </a>
    </div>
  </header>

   <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Todo</h2>
      </div>
      <form class="todo">
        <div class="todo__group">
          <div class="todo-content">
            <div class="todo__input--text">
              <input type="text" name="content">
               <div class="form__button">
              <button class="form__button-submit" type="submit">送信</button>
             </div>
              <div class="todo-content__error">
              <!--バリデーション機能を実装したら記述します。-->
              </div>
           
            </div>
          </div>
        </div>

       <div class="todo-title">
        <div class="class">
            <p>Todo</p>
        </div>
       </div>
    
        <div class="todo__group">
          <div class="todo-content">
            <div class="todo__input--text">
              <input type="text" name="content">
              <button class="todo__button-update" type="submit">更新</button>
              <button class="todo__button-delete" type="">削除</button>

              <div class="todo-content__error">
              <!--バリデーション機能を実装したら記述します。-->
              </div>
           
            </div>
          </div>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
