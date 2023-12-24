<style>
    *{
        margin: 0;
        padding: 0;
    }
    .bg-1{
        background-color: rgba(249, 249, 247, 0.9); 
    }
    #bg{
        height: 600px;
    }
    #container-fluid{
        position: relative;
    }
    form{
        position: absolute;
        top: 45%;
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
        border-radius: 72px;
        border: 1px solid var(--Neutral-03, #DBDFD0);
        background: var(--Neutral-01, #FFF);
        display: flex;
        height: 60px;
        padding: 0px 24px;
        align-items: center;
        gap: 10px;
        margin-right: 10px;
        box-sizing: border-box;
        
    }
    .custom-label {
        font-weight: bold; /* Example: Make the label bold */
        color: #333; /* Example: Set label color */
    }
    #contact-us{
        width: 800px;
        height: 580px;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    #btn-btn-id-send:hover{
        color: var(--Neutral-07, #182226) !important;
        background: none !important;
    }
    
</style>