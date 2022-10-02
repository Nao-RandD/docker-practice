# docker-practice
Dockerの基礎的な学習に使用する資料を置いています

## server-webrickの実行

1. Dockerfileがある場所で下記のコマンドを実行してImageを作成
``` bash
~% docker image build -t sample/webrick:latest .
```
＊ 作成後にdocker image lsでsample/webrickが作成されたことを確認

2. Imageを元に
``` bash
~% docker container run -d -p 8000:8000 --name webrick sample/webrick:latest
 ```

3. 確認するブラウザに`http://localhost:8000/`をペースト

4. `main.rb`のbodyに入れてある内容が表示されていることを確認（helloがデフォルト）

## 起動したコンテナの後片付け
1. 起動したコンテナを停止させる
``` bash
docker container stop webrick
```
＊ `docker container ls`で確認

2. 作成したコンテナを削除する
``` bash
docker container rm webrick
```
＊ `docker container ls -a`で確認


