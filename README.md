## 編集結果をGitHubへ反映させる確認 [1月27日(月)]
#### 1. 事前準備:   現在の作業すべてを一旦コミットしておく => プッシュする

ステージング
```
git add .
```

コミット
```
git commit -m "新しいブランチを作成するためにコミット"
```

プル
```
git pull origin main
```


##### 準備完了

---

#### 2. 各々がローカル環境のmainブランチにて、以下の[]内に`OK`を入力し、`add => commit => push` する

- [] リーダー
- [] サブリーダー
- [] ドキュメント管理
- [] 書記

<details>
<summary>上記2.の手順(詳細)</summary>
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

##### 以上 ###############

```
    
</details>


---

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
---
<details>
    <summary>PHP, Laravel関連のVSCode拡張機能メモ</summary>

■Laravel拡張機能
- Laravel Extension Pack / (Winnie Lin)  ...Laravelの開発に有用な拡張機能13個の詰め合わせ


<br>
<br>
<br>
    
~~■PHP拡張機能~~
~~- PHP Intelephense : 高機能な構文チェックやコード補完機能が使えるようになるが、~~  
~~「PHP Intelephense」を使用するためには、VSCodeに組み込まれている「PHP 言語機能」を無効にする必要あり。~~

~~手順は以下の通り。~~

~~1. VSCodeで拡張機能の一覧を開く~~
~~2. 「@builtin php」と検索する~~
~~3. 「PHP 言語機能」を無効にする。「PHP の基本言語サポート」は有効のままでOK。~~

    
</details>


---
---

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

---
---

<details><summary>2025年1月24日(金)メモ</summary>
    - GitHubのエラーは、再度新しいリポジトリをpublicで作成することで解決
    - 招待されたメールから「Accept invitation」を押下を忘れていたかも

</details>

---
---

# コーディング規則（仮）

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
