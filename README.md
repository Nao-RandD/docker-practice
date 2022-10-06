# docker-practice
Dockerの基礎的な学習に使用する資料を置いています

---
## server-webrick
---
### DockerでのWebサーバーの構築
1. Dockerfileがある場所で下記のコマンドを実行してImageを作成
``` bash
~% docker image build -t sample/webrick:latest .
```
＊ 作成後にdocker image lsでsample/webrickが作成されたことを確認

2. Imageを元に
``` bash
~% docker container run -d -p 8000:8000 --name webrick sample/webrick:latest
 ```

3. 確認としてブラウザに`http://localhost:8000/`をペースト

4. `main.rb`のbodyに入れてある内容が表示されていることを確認（helloがデフォルト）

### 起動したコンテナの後片付け
1. 起動したコンテナを停止させる
``` bash
~% docker container stop webrick
```
＊ `docker container ls`で確認

2. 作成したコンテナを削除する
``` bash
~% docker container rm webrick
```
＊ `docker container ls -a`で確認

---
## LAMP
---
### LAMP（Apache, MySQL, PHP）環境の立ち上げ
1. ./LAMPディレクトリに移動
2. 下記のコマンドで一式を立ち上げ
``` bash
~% docker compose up -d
```
3. 確認としてブラウザに`http://localhost:8001/`をペースト
Connected To MySQLが表示されることを確認
4. 確認としてブラウザに`http://localhost:8002/`をペースト
ユーザ名：root, パスワード：12345678　と入力する
自身のデータベースが構築できている

### 起動したコンテナの後片付け
1. 作成したコンテナを削除する
``` bash
~% docker compose down
```

---
## すべてのお片付け
---
1. バルスとして下記をして終わり
``` bash
~% docker system prune -a --volumes
```

---
## その他
---
### プラスα
同じネットワークに繋いだ端末から下記でIPアドレスを調べて、立ち上げたサーバを除くのも楽しい

- IPアドレスの調べ方
    - Macの場合
        ``` bash
        $ ipconfig getifaddr en0
        ```
    - Windowsの場合
        ``` bash
        $ ipconfig
        ```
        ※表示されたIPv4アドレスを確認する
