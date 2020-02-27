{extends file='../Shared/Layout.tpl'}


{block name=title}Un titre pour ma page{/block}


{block name=content}

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
        </tr>
        </thead>
        <tbody>
{*        <?php*}
{*        foreach ($listeClients->getListeClients() as $client){*}
{*        displayClient($client);*}
{*        }*}
{*        ?>*}

            {foreach from=$clients item=client}
                <tr>
                    <td>{$client->getPrenom()}</td>
                    <td>{$client->getNom()}</td>
                    <td>{$client->getAdresse()}</td>
                    <td>{$client->getCP()}</td>
                    <td>{$client->getVille()}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>

{/block}