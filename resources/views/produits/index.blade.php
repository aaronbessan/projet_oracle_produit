@extends('./layouts/app')
@section('page-content')
    <table>
        <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Quantité en stock</th>
                <th>Catégorie</th>
                <th>Fournisseur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->quantite_stock }}</td>
                    <td>{{ $produit->categorie->nom }}</td>
                    <td>{{ $produit->fournisseur->nom }}</td>
                    <td>
                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
