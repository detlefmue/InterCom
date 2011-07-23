{adminheader}
{pageaddvar name="stylesheet" value="modules/InterCom/style/style.css"}
<div id="intercom" class="ic-init">
    <h2>{gt text="InterCom installation" domain="module_intercom"}</h2>
    {insert name="getstatusmsg"}
    <h3>{gt text="Step 2 - data importation" domain="module_intercom"}</h3>
    <ul>
        <li><a class="image ok"     href="{modurl modname="InterCom" type="interactiveinstaller" func="step3" import=1 }" title="{gt text="Import messages from the Messages Module (Core)" domain="module_intercom"}">{gt text="Import messages from PostNuke Messages module (core version)" domain="module_intercom"}</a></li>
        <li><a class="image cancel" href="{modurl modname="InterCom" type="interactiveinstaller" func="step3" }" title="{gt text="Do not import messages" domain="module_intercom"}">{gt text="Import no message" domain="module_intercom"}</a></li>
    </ul>
</div>
