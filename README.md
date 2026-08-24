[README.md](https://github.com/user-attachments/files/31365851/README.md)
# Chiang Mai Tourist 🏔️🛕

เว็บไซต์ประชาสัมพันธ์ข้อมูลการท่องเที่ยวจังหวัดเชียงใหม่ พัฒนาด้วย **PHP + MySQL (MariaDB)** ทำงานบน XAMPP โดยมีระบบสมาชิก (สมัคร / เข้าสู่ระบบ / แก้ไขรหัสผ่าน), หน้าแสดงข่าวและประกาศ และหน้ารวมแหล่งท่องเที่ยวแยกตามหมวดหมู่ที่ดึงข้อมูลจากฐานข้อมูลแบบไดนามิก

> A PHP/MySQL web application that showcases tourist information for Chiang Mai, Thailand — complete with user authentication, a news feed, and a categorized attractions directory.

---

## ✨ คุณสมบัติหลัก (Features)

- **ระบบสมาชิก (Authentication)** — สมัครสมาชิก, เข้าสู่ระบบ และแก้ไข/รีเซ็ตรหัสผ่าน โดยเก็บรหัสผ่านแบบเข้ารหัสด้วย `password_hash()` / `password_verify()`
- **ป้องกันการเข้าถึงหน้าโดยไม่ล็อกอิน** — หน้าแรกตรวจสอบ session และเปลี่ยนเส้นทางไปหน้า Login หากยังไม่ได้เข้าสู่ระบบ
- **ข่าวและประกาศ (News Feed)** — ดึงข่าวจากตาราง `news` มาแสดงเรียงตามวันที่ล่าสุด
- **แหล่งท่องเที่ยว (Attractions)** — แสดงสถานที่ท่องเที่ยวแยกเป็น 4 หมวด: ภูเขา (Mountain), วัด (Temple), ช้อปปิ้ง (Shopping) และครอบครัว (Family) โดยดึงข้อมูลจากตาราง `places`
- **ข้อมูลจังหวัด** — ประวัติความเป็นมา, โครงสร้างการบริหาร, วิสัยทัศน์/พันธกิจ และศูนย์บริการประชาชน
- **ความปลอดภัยพื้นฐาน** — ใช้ Prepared Statements และ `htmlspecialchars()` เพื่อลดความเสี่ยง SQL Injection และ XSS

---

## 🗂️ โครงสร้างโปรเจกต์ (Project Structure)

```
Chiangmai/
├── index.php            # หน้าแรก (ต้องล็อกอิน) — ข้อมูลจังหวัด, การ์ดหมวดท่องเที่ยว, ข่าว, ศูนย์บริการ
├── Login.php            # ฟอร์มเข้าสู่ระบบ
├── login_db.php         # ประมวลผลการเข้าสู่ระบบ (ตรวจรหัสผ่านด้วย password_verify)
├── register.php         # ฟอร์มสมัครสมาชิก
├── register_db.php      # ประมวลผลการสมัครสมาชิก (เข้ารหัสรหัสผ่านก่อนบันทึก)
├── edit.php             # แก้ไข / รีเซ็ตรหัสผ่านผู้ใช้
├── db_connection.php    # การเชื่อมต่อฐานข้อมูล (mysqli)
├── errors.php           # เทมเพลตแสดงข้อความ error
├── select.php           # (เลิกใช้แล้ว — เหลือไฟล์ว่างไว้กันลิงก์เก่าเสีย)
├── update.php           # (เลิกใช้แล้ว — เหลือไฟล์ว่างไว้กันลิงก์เก่าเสีย)
├── style.css            # สไตล์หน้าหลัก
├── cmidb.sql            # ไฟล์ dump ฐานข้อมูล (news, places, user)
├── data.txt             # ข้อมูลอ้างอิง/ตัวอย่าง
├── font/                # ฟอนต์
├── img/                 # รูปภาพ (พื้นหลัง, การ์ดหมวด, ข่าว, สถานที่)
└── New/
    ├── tourist.php      # หน้ารวมแหล่งท่องเที่ยวแยกตามหมวด
    ├── style2.css       # สไตล์หน้าท่องเที่ยว
    └── db_connection.php
```

---

## 🧱 ฐานข้อมูล (Database Schema)

ฐานข้อมูลชื่อ **`cmidb`** ประกอบด้วย 3 ตาราง:

| ตาราง | คำอธิบาย | คอลัมน์สำคัญ |
|--------|-----------|---------------|
| `user`   | บัญชีผู้ใช้ | `id`, `username`, `password`, `role` (`admin` / `user`) |
| `news`   | ข่าวและประกาศ | `id`, `title`, `detail`, `img`, `date` |
| `places` | แหล่งท่องเที่ยว | `id`, `name`, `category` (`Mountain`/`Temple`/`Shopping`/`Family`), `description`, `location`, `img` |

---

## 🚀 การติดตั้งและใช้งาน (Getting Started)

### สิ่งที่ต้องมี (Requirements)
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL/MariaDB + PHP 8.x)

### ขั้นตอน

1. **คัดลอกโปรเจกต์** ไปไว้ในโฟลเดอร์ `htdocs` ของ XAMPP

   ```
   C:\xampp\htdocs\Chiangmai
   ```

2. **เปิด Apache และ MySQL** จาก XAMPP Control Panel

3. **สร้างฐานข้อมูลและนำเข้าข้อมูล**
   - เปิด [phpMyAdmin](http://localhost/phpmyadmin)
   - สร้างฐานข้อมูลชื่อ `cmidb`
   - เลือกแท็บ **Import** แล้วนำเข้าไฟล์ `cmidb.sql`

4. **ตรวจสอบการเชื่อมต่อฐานข้อมูล** ในไฟล์ `db_connection.php` (ค่าเริ่มต้นสำหรับ XAMPP)

   ```php
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $db         = "cmidb";
   ```

5. **เปิดใช้งานผ่านเบราว์เซอร์**

   ```
   http://localhost/Chiangmai/index.php
   ```

---

## 👤 บัญชีทดสอบ (Demo Accounts)

ไฟล์ `cmidb.sql` มีบัญชีตัวอย่างมาให้ (รหัสผ่านในไฟล์ dump ยังเป็นข้อความธรรมดา ระบบจะอัปเกรดเป็น hash อัตโนมัติเมื่อล็อกอินครั้งแรก):

| Username | Password | Role  |
|----------|----------|-------|
| `admin`  | `123`    | admin |
| `user`   | `123`    | user  |

> 🔒 **แนะนำ:** เปลี่ยนรหัสผ่านบัญชีเริ่มต้นเหล่านี้ก่อนนำไปใช้งานจริง

---

## 🛠️ เทคโนโลยีที่ใช้ (Tech Stack)

- **Backend:** PHP (mysqli)
- **Database:** MySQL / MariaDB
- **Frontend:** HTML, CSS (ฟอนต์ Google Fonts — *Mali*)
- **Server:** Apache (XAMPP)

---

## 📝 หมายเหตุ (Notes)

- ไฟล์ `select.php` และ `update.php` เดิมเป็นสคริปต์ทดสอบที่ไม่มีการตรวจสอบสิทธิ์ ปัจจุบันถูกปิดการทำงานและเหลือไว้เป็นไฟล์ว่างเพื่อไม่ให้กระทบลิงก์เก่า สามารถลบทิ้งได้หากไม่มีการอ้างถึง
- โปรเจกต์นี้เป็นงานเชิงการศึกษา/สาธิต หากนำไปใช้งานจริงควรเพิ่มมาตรการความปลอดภัย เช่น CSRF protection, การจำกัดสิทธิ์ตาม role และการตั้งค่ารหัสผ่านฐานข้อมูล
