@extends('layouts.homeLayout')

@section('seo')
<meta name="description" content="Page de création des articles de la boutique, réservée au membres du BDE.">
<title>Ajout d'un article | Site du BDE</title>
@endsection

@section('content')
<script src="C:\Users\Desktop\BDE-API\articles.js" rel="text/javascript"></script>
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<form method="POST">
					@csrf
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Entrez le nom de l'article</label>
						<div class="col-md-6">
							<input class="form" name="article_name" type="text" placeholder="Nom de l'article">
								@if($errors->has('article_name'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('article_name') }}</strong>
									</span>
								@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="first_name" class="col-md-4 col-form-label text-md-right">Donnez une description à cet article</label>
						<div class="col-md-6">
							<textarea name="article_desc" type="text" placeholder="Description"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Donnez le type d'article</label>
						<div class="col-md-6">
							<input class="form" name="article_type" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Donnez une image à cet article</label>
						<div class="col-md-6">
							<input class="form" name="article_img" type="file">
						</div>
					</div>
					<div class="form-group row">
						<label for="article_price" class="col-md-4 col-form-label text-md-right">Donnez un prix à cet article</label>
						<div class="col-md-6">
							<input class="form" name="article_price" type="number" step="0.01">
						</div>
					</div>
					<div class="form-group row mb-0">
						<button type="submit">Créer</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
