<style>

    .title-event-large {
        width: 600px;
        right: 1180px;
        top:100px;
        transform: translateX(5%);
        /* Headline/H2 */
        font-family: Playfair Display;
        font-size: 55px;
        font-style: normal;
        font-weight: 500;
        line-height: 60.5px; /* 110% */
    }

    .event-container {
        width: 100%;
        max-width: 400px;
        margin: 0 10px 30px; /* Thay đổi giá trị margin nếu bạn muốn các .event-container nằm gần nhau hơn */
    }

    .event {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 12px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .event:hover {
        transform: translateY(-5px);
    }

    .image-event {
        width: 100%;
        height: 100%; /* Thay đổi giá trị height thành 100% để hình ảnh rộng bằng .event */
        border-radius: 12px 12px 0 0;
        overflow: hidden;
    }

    .image-event img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .content-event{
        display: inline-flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .title-event {
        margin-top: 20px;
        color: #2c2f24;
        text-align:start;
        font-family: "DM Sans", sans-serif;
        font-size: 24px;
        font-weight: 700;
        line-height: 30px;
    }

    .description-event {
        margin-top: 10px;
        color: #414536;
        text-align:start;
        font-family: "DM Sans", sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
    }
</style>