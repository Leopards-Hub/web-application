<style>
    /* Css for header-bottom.php */
    .header-navbarcontainer{
        width: 100%;
        height: 55px;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
    }
    .container-head{
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        width: 84%;
    }
    /* css for navbar */
    nav {
        display: flex; /* Sử dụng flexbox để các mục nằm ngang */
        justify-content: center; /* Canh giữa các mục trong thanh điều hướng */
    }

    nav ul {
        list-style-type: none; /* Loại bỏ dấu chấm/bullet của danh sách */
        padding: 0; /* Loại bỏ padding mặc định của danh sách */
        display: flex; /* Sử dụng flexbox cho các mục con */
        flex-direction: row;
        padding-top: 15px;
    }

    nav li {
        margin-right: 10px; /* Khoảng cách giữa các mục (tùy chọn) */
        color: var(--Neutral-07, #2C2F24);
        /* Body/16px/Medium */
        font-family: DM Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px; /* 150% */
    }

    nav a {
        text-decoration: none; /* Loại bỏ đường gạch chân cho liên kết */
        padding: 10px; /* Tăng độ rộng của khu vực bấm cho mỗi mục (tùy chọn) */
        color: #333; /* Màu chữ (tùy chọn) */
    }

    nav a:hover {
        color: #ff0000; /* Màu chữ khi di chuột qua mỗi mục (tùy chọn) */
    }
    .menu2{
        
        width: 400px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: flex-start;
        
    }
    .menu2 a{
        color: #ffffff;
        padding:0;
    }
</style>