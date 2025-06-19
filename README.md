# 書籍管理アプリ

## 主な機能
### ログイン
<img width="500" alt="スクリーンショット 2025-06-19 17 48 41" src="https://github.com/user-attachments/assets/78450257-dacd-4a5f-985c-f5340e85920c" />

### メニュー
<img width="500" alt="スクリーンショット 2025-06-19 17 51 34" src="https://github.com/user-attachments/assets/743c6c37-16ef-4deb-973c-0f7fdbde0902" />

### 書籍一覧
<img width="500" alt="スクリーンショット 2025-06-19 17 49 31" src="https://github.com/user-attachments/assets/a41ecd4a-1ea0-4c65-955b-82b95c37b8c6" />

### 書籍詳細
<img width="500" alt="スクリーンショット 2025-06-19 17 49 57" src="https://github.com/user-attachments/assets/dba15fd1-68ac-4c3a-aa96-83c8e937c282" />

### 書籍検索
<img width="500" alt="スクリーンショット 2025-06-19 17 50 31" src="https://github.com/user-attachments/assets/d2d1f4a1-ddd3-4b24-83a8-befed426ef43" />

### 検索結果
<img width="500" alt="スクリーンショット 2025-06-19 17 51 12" src="https://github.com/user-attachments/assets/c1a3146c-02c5-4021-853d-2bfa4b7f762b" />

### 社員一覧
<img width="500" alt="スクリーンショット 2025-06-19 17 51 56" src="https://github.com/user-attachments/assets/6a071b24-fed7-4aa1-9335-7735731ff33a" />

### 社員登録
<img width="500" alt="スクリーンショット 2025-06-19 17 52 27" src="https://github.com/user-attachments/assets/3e26c59f-be52-4f94-8ab6-9346c02c47ce" />

### 社員削除
<img width="500" alt="スクリーンショット 2025-06-19 18 16 06" src="https://github.com/user-attachments/assets/fde1ac96-e51a-4d7e-bf2b-6a8d22a8eaf5" />
<img width="500" alt="スクリーンショット 2025-06-19 18 16 27" src="https://github.com/user-attachments/assets/9acdd6d3-b1ce-4695-a06e-bda7389bd723" />


### 書籍管理メニュー
<img width="500" alt="スクリーンショット 2025-06-19 17 52 50" src="https://github.com/user-attachments/assets/375bad33-f865-4722-b144-6fe20374b49a" />

### 書籍登録
<img width="500" alt="スクリーンショット 2025-06-19 17 53 11" src="https://github.com/user-attachments/assets/aeb81b82-9ad6-4d68-9d32-add07f3546ca" />
<img width="500" alt="スクリーンショット 2025-06-19 17 55 26" src="https://github.com/user-attachments/assets/18a8428d-3233-4b53-9c8a-ac9219b07a5b" />

### 書籍削除
<img width="500" alt="スクリーンショット 2025-06-19 17 56 18" src="https://github.com/user-attachments/assets/4968e24e-7a31-4723-84ca-f0243b322283" />
<img width="500" alt="スクリーンショット 2025-06-19 17 56 25" src="https://github.com/user-attachments/assets/759d1f2b-898e-4e87-9ecc-6aef2f27f61b" />

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





