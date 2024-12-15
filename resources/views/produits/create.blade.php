@extends('./.../layouts/app')
@section('page-content')

    <div class="container mt-5">
        <h1 class="text-center mb-4">Ajouter un nouveau produit</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produits.store') }}" method="POST" class="card p-4 shadow-sm custom-form">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du produit</label>
                <input type="text" id="nom" name="nom" class="form-control custom-border"
                    placeholder="Entrez le nom du produit" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control custom-border" rows="3"
                    placeholder="Entrez une description"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="number" id="prix" name="prix" class="form-control custom-border" step="0.01"
                        placeholder="Entrez le prix" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="quantite_stock" class="form-label">Quantité en stock</label>
                    <input type="number" id="quantite_stock" name="quantite_stock" class="form-control custom-border"
                        placeholder="Entrez la quantité" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="categorie_id" class="form-label">Catégorie</label>
                <select id="categorie_id" name="categorie_id" class="form-select custom-border" required>
                    <option value="" selected disabled>Choisissez une catégorie</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fournisseur_id" class="form-label">Fournisseur</label>
                <select id="fournisseur_id" name="fournisseur_id" class="form-select custom-border" required>
                    <option value="" selected disabled>Choisissez un fournisseur</option>
                    @foreach ($fournisseurs as $fournisseur)
                        <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Ajouter le produit</button>
            </div>
        </form>
    </div>

@endsection
