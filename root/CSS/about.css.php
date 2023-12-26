<style>
    .bg-1{
        background-color: rgba(249, 249, 247, 0.9); 
    }
    video {
        /* height: 900px; */
        /* padding-top: 80px; */
        filter: grayscale(30%);
    }

    .video-container {
        position: relative;
    }

    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: var(--Neutral-01, #FFF);
        text-align: center;

        /* Headline/H2 */
        font-family: Playfair Display;
        font-size: 55px;
        font-style: normal;
        font-weight: 500;
        line-height: 60.5px;
        /* 110% */
        width: 1000px;
    }
    .text-overlay>h1{
        font-size: 100px;
        font-weight: bold;
    }

    .item-about {
        padding-top: 30px;
        display: flex;
        width: 1200px;
        margin-left: 180px;
    }

    .item {
        display: flex;
        align-items: flex-start;
        gap: 20px;

    }

    .item-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;

    }

    #large-item-content {
        color: var(--Neutral-07, #2C2F24);
        text-align: center;

        /* Body/20px/Bold */
        font-family: DM Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px;
        /* 130% */

    }

    #smaill-item-content {
        color: var(--Neutral-06, #414536);

        /* Body/16px/Regular */
        font-family: DM Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 15px;
        /* 150% */
        width: 250px;
    }
    #information{
        margin-top: 80px;
    }

    .information-about {
        display: flex;
        width: 1600px;
        height: 600px;
        flex-shrink: 0;
        background: var(--Neutral-02, #ECECEA);
        /* Thay đổi giá trị màu hoặc thay mã màu hex tại đây */
        padding-bottom: 80px;
    }


    .information-left {
        display: inline-flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        padding-left: 100px;

    }

    .card {
        width: 293px !important;
        height: 174px !important;
        flex-shrink: 0;
        border-radius: 8px;
        border: 1px solid var(--Neutral-03, #DBDFD0);
        background: var(--Neutral-01, #FFF);
        margin-bottom: 80px;
    }

    .card h2 {
        color: var(--Neutral-07, #2C2F24);
        text-align: center;

        /* Headline/H2 */
        font-family: Playfair Display;
        font-size: 55px;
        font-style: normal;
        font-weight: 500;
        line-height: 60.5px;
        /* 110% */

    }

    .card p {
        color: var(--Neutral-06, #414536);
        text-align: center;

        /* Body/18px/Medium */
        font-family: DM Sans;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 28px;
        /* 155.556% */
    }

    .card-number {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .sum-card {
        display: flex;
        flex-direction: column;
        width: 48%;
        /* Điều chỉnh chiều rộng của khung con */
        margin-bottom: 20px;
        gap: 20px;
        /* Điều chỉnh khoảng cách giữa các khung */
    }

    .card {
        background-color: #f2f2f2;
        /* Màu nền của khung */
        padding: 10px;
        text-align: center;
        margin-bottom: 10px;
        margin-right: 15px;
    }

    .information-right img {

        width: 555px;
        height: 680px;

    }

    #comment-about {
        position: relative;
        right: 110px;
    }
</style>