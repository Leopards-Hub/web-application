<style>
    #bg-1 {
        height: 600px;
        position: relative;
    }
    .title{
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    #container-fluid{
        position: relative;
    }
    form{
        position: absolute;
        top: 44%;
        right: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: inline-flex;
        width: 800px;
        height: 580px;
        padding: 40px;
        flex-direction: column;
        gap: 22px;
        border-radius: 16px;
        background: var(--Neutral-01, #FFF);
        box-sizing: border-box;
        /* 2 */
        box-shadow: 0px 2.979px 59.574px 0px rgba(0, 0, 0, 0.08);
    }
    input{
        border-radius: 72px !important ;
        border: 1px solid var(--Neutral-03, #DBDFD0) !important ;
        background: var(--Neutral-01, #FFF) !important;
        display: flex !important ;
        height: 60px !important;
        padding: 0px 24px !important;
        align-items: center !important;
        gap: 10px !important;
        margin-right: 10px !important; 
        box-sizing: border-box !important; 
    }
    select{
        border-radius: 72px !important ;
        border: 1px solid var(--Neutral-03, #DBDFD0) !important ;
        background: var(--Neutral-01, #FFF) !important;
        display: flex !important ;
        height: 60px !important;
        padding: 0px 24px !important;
        align-items: center !important;
        gap: 10px !important;
        margin-right: 10px !important; 
        box-sizing: border-box !important; 
    }
    #container-map{
        height: 70%;
        width: 100%;
    }
    #btn-id-book-table:hover{
        color: var(--Neutral-07, #182226) !important;
        background: none !important;
    }
</style>