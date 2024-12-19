<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title ." | " : "" ?>Stratford CRUD</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--end of Styles -->

    <!-- Scritps -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end of Scritps -->



    <!-- Wrapper -->
    <div class="wrapper my-4">
        <!-- Main Container -->
        <div class="main container">
            <?php if(!empty($session->getFlashdata('success_message'))): ?>
                <div class="alert alert-success rouded-0">
                    <div class="d-flex">
                        <div class="col-11"><?= $session->getFlashdata('success_message') ?></div>
                        <div class="col-1 text-end"><a href="javascript:void(0)" onclick="$(this).closest('.alert').remove()" class="text-muted text-decoration-none"><i class="fa fa-times"></i></a></div>
                    </div>
                </div>
            <?php endif ?>
            <?php if(!empty($session->getFlashdata('error_message'))): ?>
                <div class="alert alert-danger rouded-0">
                    <div class="d-flex">
                        <div class="col-11"><?= $session->getFlashdata('error_message') ?></div>
                        <div class="col-1 text-end"><a href="javascript:void(0)" onclick="$(this).closest('.alert').remove()" class="text-muted text-decoration-none"><i class="fa fa-times"></i></a></div>
                    </div>
                </div>
            <?php endif ?>

       