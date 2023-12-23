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
        top: 50%;
        right: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: inline-flex;
        width: 600px;
        height: 550px;
        padding: 40px;
        flex-direction: column;
        gap: 10px;
        border-radius: 16px;
        background: var(--Neutral-01, #FFF);
        /* 2 */
        box-shadow: 0px 2.979px 59.574px 0px rgba(0, 0, 0, 0.08);
    }
    input{
        border-radius: 72px;
        border: 1px solid var(--Neutral-03, #DBDFD0);
        background: var(--Neutral-01, #FFF);
        display: flex;
        width: 350px;
        height: 60px;
        padding: 0px 24px;
        align-items: center;
        gap: 10px;
    }
    .custom-label {
        font-weight: bold; /* Example: Make the label bold */
        color: #333; /* Example: Set label color */
    }
</style>