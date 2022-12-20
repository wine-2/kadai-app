<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 投稿</title>
</head>
<!-- 投稿画面 -->

<body class="">
    <x-header></x-header>
    <div class="page post-page">
        <form class="form" action="/post" method="post" name="post">
            @csrf
            <textarea name="postContent" id="content" cols="30" rows="5" placeholder="いまどうしてる?"></textarea>
            <div class="post-button">
                <input class="button-white" type="button" value="送信する" name="botan">
                </input>
            </div>
            @error('postContent')
            <div class="mt-3">
                <p class="text-red-500">
                    {{ $message }}
                </p>
            </div>
            @enderror
        </form>
    </div>
</body>
<script src="{{ asset('/js/app.js') }}">
    var bootan = document.getElementById("botan");
    var content = document.getElementById("content");

    txt = "post.postContent.botan";
    a = txt.length;

    function cheak{
        if (a < 1) {
            alert("文字数が足りません")
        } else if (a > 100) {
            alert("文字数が多すぎます")
        } else {
            Submit
        }
    };


</script>
<style scoped>
    .post-page .form {
        display: flex;
        flex-direction: column;
    }

    .post-page .post-button {
        text-align: end;
        margin: 20px 20px 0 0;
    }

    .post-page button {
        height: 35px;
        width: 90px;
    }
</style>

</html>