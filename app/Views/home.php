<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>


<?php if( session()->has('usuario_removido') ) :?>
<div class="alert alert-success" role="alert">
    Usuário removido com sucesso!
</div>
<?php endif ?>


<div class="card">
    <div class="card-body">


        <div class="d-flex justify-content-between">
            <h4 class="card-title">Usuários</h4>
            <div>
                <a href="<?= site_url('novo-usuario') ?>" class="btn btn-success btn-xs p-2 btn-radius py-0">
                    <i class="bi bi-plus fs-3"></i>
                    <span class="visually-hidden">Adicinar novo usuário</span>
                </a>
            </div>

        </div>

        <table class="table table-bordered table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de registro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($users as $user) : ?>
                <tr>
                    <td>
                        <svg width="40" height="40" class="me-2 img-thumbnail" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box"
                            viewBox="0 0 16 16">
                            <path
                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                        <?= esc($user->nome) ?>

                    </td>
                    <td><?= esc($user->email) ?></td>
                    <td><?= date("d-m-Y à\\s H:i:s", strtotime($user->created_date)) ?></td>
                    <td>
                        <form action="<?= site_url('remover-usuario/' . $user->id ) ?>" method="post"
                            onsubmit="return confirm('Deseja remover este usuário?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <a href="<?= site_url('editar-usuario/' . $user->id ) ?>"
                                class="btn btn-primary btn-xs btn-radius me-2   btn-no-animation">Editar</a>
                            <button type="submit"
                                class="btn btn-danger btn-xs btn-radius btn-no-animation">Remover</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>

            </tbody>
        </table>

        <nav aria-label="Page navigation">
            <?php if ($pager && $pager->getPageCount() > 1) :?>
            <?= $pager->links() ?>
            <?php endif ?>
        </nav>


    </div>
</div>

<script>

</script>

<?= $this->endSection() ?>