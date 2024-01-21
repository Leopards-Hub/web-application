<style>
    /* Thiết lập kiểu cho container chứa nội dung */
    .container-image {
        display: flex;
        flex-direction: row;
        position: relative;
        width: 500px;
        height: auto;
    }

    #contact-image {
        width: 500px;
        height: auto;

    }

    .contact-content {
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 350px;
        height: 250px;
        flex-shrink: 0;
        /* Màu nền đen */
        color: #fff;
        /* Màu chữ trắng */
        padding: 20px;
        /* Khoảng cách lề bên trong */
        border-radius: 10px;
        /* Bo tròn góc */
        border-radius: 12px;
        background: #474747;
    }

    /* Thiết lập kiểu cho tiêu đề */
    .contact-content h6 {
        color: var(--Neutral-01, #FFF);
        /* Headline/H3 */
        font-family: DM Sans;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px;
        /* 125% */
        letter-spacing: -0.72px;
        padding-left: 10px;
    }

    /* Thiết lập kiểu cho nội dung chi tiết */
    .content {
        display: flex;
        flex-direction: column;
    }

    /* Thiết lập kiểu cho mỗi mục nội dung */
    .content-item {
        display: flex;
        align-items: center;
        padding-left: 10px;
    }

    .content-item p {
        color: var(--Neutral-02, #F9F9F7);
        /* Body/16px/Regular */
        font-family: DM Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        margin-top: 15px;
        /* 150% */
    }

    /* Thiết lập kiểu cho biểu tượng svg */
    .content-item svg {
        margin-right: 10px;
        height: 24px !important;
        width: 24px !important;
    }

    /* Thiết lập kiểu cho đường kẻ chia cách mỗi mục nội dung */
</style>