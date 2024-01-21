<style>
    .container-fluid{
        display: flex;
        flex-direction: column;

    }
    .menu-container {
        position: relative;
    }
    .container-fluid>h2{
        color: var(--Neutral-07, #2C2F24);
        text-align: center;
        /* Headline/H2 */
        font-family: Playfair Display;
        font-size: 55px;
        font-style: normal;
        font-weight: 500;
        line-height: 60.5px; /* 110% */
    }
    .menu-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 24px;
        /* Căn giữa theo chiều dọc */
    }
    .menu-child{
        display: flex;
        flex-direction: row;
    }
    .menu-card {
    height: 330px;
    padding: 40px;
    text-align: center;
    margin: 50px 0;
    border-radius: 12px;
    border: 1.5px solid var(--Neutral-03, #DBDFD0);
    background: var(--Neutral-01, #FFF);
    gap: 15px;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
        
    }

    /* Các thuộc tính CSS khác */
    .menu-card h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .menu-card p {
        font-size: 14px;
    }
    .menu-container>.menu-card{
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 10px;
    }
</style>