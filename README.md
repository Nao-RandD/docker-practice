# docker-practice
Dockerの基礎的な学習に使用する資料を置いています

## server-webrickの実行

1. Dockerfileがある場所で下記のコマンドを実行

``` bash
~% docker container run -d -p 8000:8000 --name webrick sample/webrick:latest
 ```

2. 確認するブラウザに`http://localhost:8000/`をペースト

3. `main.rb`のbodyに入れてある内容が表示されていることを確認（helloがデフォルト）