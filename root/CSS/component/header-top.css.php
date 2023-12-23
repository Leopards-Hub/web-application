    <style>
    body, html {
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Ngăn chặn thanh cuộn ngang khi nội dung vượt ra khỏi màn hình */
    }
    .header-top {
        height: 45px;
        width: 100%;
        display: inline-flex;
        padding: 9px 154.316px 8.829px 120px;
        justify-content: space-between;
        background: #474747;
        box-sizing: border-box;
    }
    .header-top-left {
        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;
        gap: 25px;
        box-sizing: border-box;
        
    }
    .phone, .email {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 10px; /* Khoảng cách giữa biểu tượng và văn bản, có thể điều chỉnh theo ý muốn */
        /* box-sizing: border-box; */
        padding: 0;
        padding-bottom: 8px;
        
    }
    .phone-icon,.email-icon{
        color: white;
        width: 10.843px;
        height: 8.765px;
        flex-shrink: 0;

        /* Thêm các thuộc tính sau để căn giữa */
        display: flex;
        align-items: center;
        justify-content: center;

    }
    .header-top-left p{
        color: var(--Neutral-02, #F9F9F7);
        /* Body/16px/Regular */
        font-family: DM Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 150% */
        padding-top: 25px;
    }
</style>
