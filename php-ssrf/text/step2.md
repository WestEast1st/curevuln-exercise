## 攻撃方法

SSRF攻撃が可能とされるアプリケーションの機能には以下のものがあります。

- *サーバーサイドでのHTTPリクエスト送信機能* : WebHookなどユーザーが指定したURLにWebアプリケーション自体がHTTPリクエストを発行している場合、ユーザーが内部ネットワークのIPアドレスを指定することで内部ネットワークのリソースへアクセスが可能となります。また、利用しているクラウドサービスにメタデータを提供しているエンドポイントが存在している場合は、インスタンスへのアクセスのための証明書や秘密鍵を取得される可能性があります。
- *XMLを処理する機能* ：XMLの持つ外部実体参照（XXE）機能を用い、任意のファイルやURLの指す内容を読み込むことで、任意のURLリソースへのアクセスが可能となります。
