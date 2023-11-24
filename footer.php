<style>
    /* Style the footer */
    .footer {
        background-color: #f1f1f1;
        padding: 2rem 10rem;
        display:flex;
        align-items: center;
        justify-content: space-between;
        gap:4rem;
    }
    .footer .navigation {
        display:flex;
        align-items: start;
        justify-content: space-around;
        gap: 2rem;
    }
    .footer .navigation a {
        text-decoration: none;
        padding: 5px;
        color: black;
        border-radius: 5px;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)
    }
    .footer .navigation a:hover {
        border: 1px solid lightgray;
        padding: 4px;
    }
    .footer .partners {

    }
    .footer .partners .content {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    .footer .partners .content img {
        width: 40px;
    }
    .footer .partners .title span {
        color: lightgray;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media (max-width: 600px) {
        .row {
            -webkit-flex-direction: column;
            flex-direction: column;
        }
    }
</style>
<div class="footer">
    <div class="navigation">
        <a href="./terms-and-conditions">Algemene voorwaarden</a>
        <a href="./account">Accountgegevens</a>
        <a href="cookies">Cookie-instellingen</a>
        <a href="./privacy">Privacyverklaring</a>
    </div>
    <div class="partners">
        <div>
            <p class="title">Wij zijn partners met <span>(examples)</span></p>
            <div class="content">
                <img src="./img/partners/ideal.png" />
                <img src="./img/partners/klarna.png" />
                <img src="./img/partners/paypal.png" />
                <img src="./img/partners/visa.svg" />
            </div>
        </div>
    </div>
</div>
