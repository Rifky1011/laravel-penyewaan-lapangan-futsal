use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        return view('admin.fields.index', compact('fields'));
    }

    public function create()
    {
        return view('admin.fields.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price_per_hour' => 'required|numeric',
        ]);

        Field::create($request->all());
        return redirect()->route('fields.index')->with('success', 'Lapangan berhasil ditambahkan.');
    }

    public function edit(Field $field)
    {
        return view('admin.fields.edit', compact('field'));
    }

    public function update(Request $request, Field $field)
    {
        $request->validate([
            'name' => 'required',
            'price_per_hour' => 'required|numeric',
        ]);

        $field->update($request->all());
        return redirect()->route('fields.index')->with('success', 'Lapangan berhasil diperbarui.');
    }

    public function destroy(Field $field)
    {
        $field->delete();
        return redirect()->route('fields.index')->with('success', 'Lapangan berhasil dihapus.');
    }
}
