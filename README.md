<details>
    <summary>使用したPHP, Laravel, MySQL バージョン確認</summary>
    
    $ php -v
    PHP 8.2.12 (cli) (built: Oct 24 2023 21:15:15) (ZTS Visual C++ 2019 x64)

    $ php artisan --version
    Laravel Framework 11.39.1
    
    $ mysql --version
    Ver 15.1 Distrib 10.4.32-MariaDB, for Win64 (AMD64)


</details>
## アプリ準備に必要な手順は以下のコマンドを参考にしてください
<details>
<summary>コマンド</summary>


パッケージのインストール
```
composer install
```

環境設定ファイルの作成
```
cp .env.example .env
```

アプリケーションキーの生成
```
php artisan key:generate
```

データベースの設定(.envファイル)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=データベース名
DB_USERNAME=ユーザー名
DB_PASSWORD=パスワード

```

データベースマイグレーション
```
php artisan migrate

```

シーダー実行
```
php artisan db:seed
```


↓これは必要ではないです↓（キャッシュのクリア）
```
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

```


</details>

<details><summary>編集結果をGitHubへ反映させる確認</summary>    
1. 事前準備:   現在の作業すべてを一旦コミットしておく => プッシュする

■ステージング
```
git add .
```

■コミット
```
git commit -m "新しいブランチを作成するためにコミット"
```

■プル
```
git pull origin main
```
準備完了


2. 各々がローカル環境のmainブランチにて、以下の[]内に`OK`を入力し、`add => commit => push` する

- [] リーダー
- [OK] サブリーダー
- [] ドキュメント管理
- [] 書記

<details>
<summary>上記2.`add => commit => push`の手順(詳細)</summary>
    
#0. 現在のブランチを確認する(*が現在のブランチ)
    
```    
git branch
```

#1. 編集してみる
README.mdファイルに`OK`と入力

```md
- [OK] リーダー
```

#2. ステージングする(コミットするファイルを登録する)

```
git add README.md
```

#3. コミットする（登録したファイルの変更履歴をローカルリポジトリに記録する）

```
git commit -m "OKを追加"
```

#4. プッシュする（ローカルリポジトリの変更をリモートリポジトリへ反映させる）

```
git push
```
#5. GitHub(リモートリポジトリ[origin/main])に変更が反映された

#6. 他の人の変更をリモートリポジトリからローカルリポジトリに取り込む(プル)

```
git pull origin main
```

#7. VSCodeにて他の人の変更が取り込まれたことを確認できる
README.md
```
- [OK] リーダー
- [OK] サブリーダー
- [OK] ドキュメント管理
- [OK] 書記

```
##### 以上 ###############

</details>
    
</details>


<details><summary>「.env」ファイルの変更案参考</summary>

    
24: DB_CONNECTION=mysql

25: DB_HOST=127.0.0.1

26: DB_PORT=3306

27: DB_DATABASE=book_management_db

28: DB_USERNAME=bookuser

29: DB_PASSWORD=bookpassword    

31: ~~SESSION_DRIVER=database~~

31:=> SESSION_DRIVER=file 



</details>





<details><summary>Git開発手順</summary>
以下は、Gitを使用して4人のチームが機能ごとにブランチを分けて開発を進める手順です。git-flowは使用せず、mainブランチと機能ブランチの2つの関係で行います。

### 1. リポジトリのクローン
まず、リポジトリをクローンします。
```bash
git clone <リポジトリURL>
cd <リポジトリ名>
```

### 2. ブランチの作成
各メンバーは自分の機能ブランチを作成します。
```bash
git checkout -b feature/<機能名>
```

### 3. 開発作業
各自の機能ブランチで開発を進めます。
```bash
git add .
git commit -m "Add <機能名> feature"
```

### 4. リモートリポジトリへのプッシュ
作業が完了したら、リモートリポジトリにプッシュします。
```bash
git push origin feature/<機能名>
```

### 5. プルリクエストの作成
GitHubなどのプラットフォームでプルリクエストを作成し、mainブランチへのマージをリクエストします。

### 6. コードレビューとマージ
他のメンバーがコードレビューを行い、問題がなければmainブランチにマージします。

### 7. mainブランチの更新
mainブランチを最新の状態に保つために、定期的にmainブランチをプルします。
```bash
git checkout main
git pull origin main
```

### 8. 機能ブランチの更新
mainブランチの変更を自分の機能ブランチに取り込みます。
```bash
git checkout feature/<機能名>
git merge main
```

### 9. コンフリクトの解消
マージ時にコンフリクトが発生した場合は、手動で解消します。
```bash
# コンフリクトを解消した後
git add .
git commit -m "Resolve merge conflicts"
```

### 10. 繰り返し
上記の手順を繰り返して開発を進めます。

これで、各メンバーが機能ごとにブランチを分けて開発を進めながら、mainブランチに随時更新していくことができます。

</details>




<details><summary>2025年1月27日(月)</summary>
    - GitHubは、SSHの設定を行うことで解決
    - Seederは保留し、明日使えるように努める
    - 1/31(金)の発表について、1班は4番目PM13:00 ~ 13:25
    - はじめの5分で、1月生向けに「訓練で学んできたこと」「語句の説明」「応用課題に向けての話」など.
        （Java, HTML/CSS, JavaScript, PHP(Laravel), データベースについて） 
    - パワーポイントで発表：　発表者、PC操作１、パワーポイント作成２名とした。
</details>


<details><summary>2025年1月24日(金)</summary>
    - GitHubのエラーは、再度新しいリポジトリをpublicで作成することで解決
    - 招待されたメールから「Accept invitation」を押下を忘れていたかも

</details>


<details>
<summary>
 コーディング規則（仮）
</summary>
    

本プロジェクトのコーディング規則は、以下の通り。

## 要約

「クラス名やファイル名はパスカルケース」「関数・変数名はキャメルケース」「定数は大文字スネークケース」と覚えてすればよい。

### 1. **クラス名**

-   **パスカルケース（PascalCase）**を使用。
-   単語の先頭を大文字にし、単語間に区切り文字を使わない。
-   例:
    ```php
    class UserProfile {}
    class BookManager {}
    ```

---

### 2. **メソッド名**

-   **キャメルケース（camelCase）**を使用。
-   最初の単語を小文字にし、それ以降の単語の先頭を大文字に。
-   例:
    ```php
    public function getUserName() {}
    public function calculateTotal() {}
    ```

---

### 3. **変数名**

-   **キャメルケース（camelCase）**を使用。
-   メソッド名と同じルール。
-   例:
    ```php
    $userName = 'John';
    $totalAmount = 100;
    ```

---

### 4. **定数名**

-   **全て大文字（UPPER_SNAKE_CASE）**で、単語間はアンダースコア（\_）で区切る。
-   例:
    ```php
    const MAX_USERS = 100;
    const API_KEY = 'your-api-key';
    ```

---

### 5. **名前空間とクラス**

-   名前空間は**パスカルケース**。
-   フォルダ構造と対応させる。
-   例:

    ```php
    namespace App\Services;

    class UserService {}
    ```

---

### 6. **ファイル名**

-   クラス名に一致させ、**パスカルケース**を使用。
-   例:
    ファイル名: `UserProfile.php`

---

</details>


<details>
<summary>
    GitHubの接続エラーの解決
</summary>    
リモートURLを更新
GitHubリポジトリのリモートURLを更新して、パーソナルアクセストークンを使用できるようにする。

~~git remote set-url origin https://[your_token]@github.com/[your-username]/hello-world-app.git~~


```
git remote set-url origin https://{USER}:{ACCESS_TOKEN}@github.com/{REPOSITORY}.git
```
</details>


---

## テーブル設計

### users
| 名前             | タイプ           | 属性       | NULL許容 | デフォルト値 | その他          |
|------------------|------------------|------------|------|--------------|-----------------|
| u_id (PK)          | bigint          | UNSIGNED   | いいえ | なし         | AUTO_INCREMENT  |
| u_name           | varchar(255)    |            | いいえ | なし         |                 |
| password         | varchar(255)    |            | いいえ | なし         |                 |
| d_id (FK)        | bigint          | UNSIGNED   | いいえ | なし         |                 |
| user_code        | varchar(255)    |            | いいえ | なし         |                 |
| remember_token   | varchar(100)    |            | はい   | NULL         |                 |
| created_at       | timestamp       |            | はい   | NULL         |                 |
| updated_at       | timestamp       |            | はい   | NULL         |                 |

---

### departments
| 名前              | タイプ           | 属性       | NULL許容 | デフォルト値 | その他          |
|-------------------|------------------|------------|------|--------------|-----------------|
| d_id (PK)           | bigint          | UNSIGNED   | いいえ | なし         | AUTO_INCREMENT  |
| d_name            | varchar(255)    |            | いいえ | なし         |                 |
| department_code   | varchar(255)    |            | いいえ | なし         |                 |
| created_at        | timestamp       |            | はい   | NULL         |                 |
| updated_at        | timestamp       |            | はい   | NULL         |                 |

---

### books
| 名前              | タイプ           | 属性       | NULL許容 | デフォルト値 | その他          |
|-------------------|------------------|------------|------|--------------|-----------------|
| b_id (PK)           | bigint          | UNSIGNED   | いいえ | なし         | AUTO_INCREMENT  |
| title             | varchar(255)    |            | いいえ | なし         |                 |
| author            | varchar(255)    |            | はい   | NULL         |                 |
| description       | text            |            | はい   | NULL         |                 |
| published_date    | date            |            | はい   | NULL         |                 |
| ISBN              | varchar(255)    |            | はい   | NULL         |                 |
| image_url         | varchar(255)    |            | はい   | NULL         |                 |
| created_at        | timestamp       |            | はい   | NULL         |                 |
| updated_at        | timestamp       |            | はい   | NULL         |                 |

---

### reviews

| 名前              | タイプ           | 属性       | NULL許容 | デフォルト値 | その他          |
|-------------------|------------------|------------|------|--------------|-----------------|
| r_id (PK)           | bigint          | UNSIGNED   | いいえ | なし         | AUTO_INCREMENT  |
| rating            | tinyint         | UNSIGNED   | いいえ | なし         |                 |
| comment           | text            |            | いいえ | なし         |                 |
| u_id (FK) | bigint          | UNSIGNED   | いいえ | なし         |                 |
| b_id (FK) | bigint          | UNSIGNED   | いいえ | なし         |                 |
| created_at        | timestamp       |            | はい   | NULL         |                 |
| updated_at        | timestamp       |            | はい   | NULL         |                 |





