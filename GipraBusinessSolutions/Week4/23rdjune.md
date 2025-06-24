## ✅ 23/06/2025 – Last Week Update

Faced issues starting **MySQL server in XAMPP** due to **port conflicts**.

- ❌ MySQL wouldn’t start; turned out to be a **port clash**.
- 🔍 Tried multiple fixes and finally resolved it with help from a **colleague** and **Stack Overflow**.
- 🛠️ Followed proper recovery steps to avoid data loss _(stack overflow)_: 
  1. Renamed `mysql/data` to `mysql/data_old`
  2. Made a copy of `mysql/backup` and renamed it as `mysql/data`
  3. Copied necessary database folders (except `mysql`, `phpmyadmin`, `performance_schema`, and `test`) from `data_old` to `data`
  4. Copied `ibdata1` file from `data_old` into new `data` folder
  5. Restarted MySQL using XAMPP control panel

- 🌐 Tried hosting my **portfolio** using [InfinityFree](https://infinityfree.net/) _(recommended by ChatGPT)_

🕓 The port clash and setup issues took away almost an entire day — but glad I got it fixed in the end.
