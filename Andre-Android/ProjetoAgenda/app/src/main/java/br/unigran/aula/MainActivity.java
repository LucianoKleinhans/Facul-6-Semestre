package br.unigran.aula;

import android.content.Intent;
import android.database.Cursor;
import android.net.Uri;
import android.os.Build;
import android.provider.ContactsContract;
import android.support.annotation.Nullable;
import android.support.annotation.RequiresApi;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.AndroidException;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import br.unigran.crud.Dados;
import br.unigran.domain.Contato;

public class MainActivity extends AppCompatActivity {
    private ListView lista;
    ArrayAdapter<String> adapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        lista= findViewById(R.id.lista);
     atualiza();

        lista.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
               Intent it = new Intent(getApplicationContext(),Segunda.class);
               it.putExtra("Contato", (Contato)Dados.getLista().get(i));

                Contato o=(Contato)Dados.getLista().get(i);
                startActivityForResult(it,201);
            }
        });

        lista.setOnItemLongClickListener(new AdapterView.OnItemLongClickListener() {
            @Override
            public boolean onItemLongClick(AdapterView<?> adapterView, View view, int i, long l) {
                Dados.remove(i);

                atualiza();
                return true;
            }
        });
    }

    private void atualiza() {
        if(adapter==null){
            adapter = new ArrayAdapter<>(this, R.layout.support_simple_spinner_dropdown_item, Dados.getLista());
            lista.setAdapter(adapter);
        }else
            adapter.notifyDataSetChanged();
    }

    public void novoContato(View view) {
        Intent it = new Intent(this, Segunda.class);
        startActivityForResult(it, 201, null);
    }

    public void importarContato(View view){
        Intent it = new Intent(Intent.ACTION_PICK);
        it.setType(ContactsContract.CommonDataKinds.Phone.CONTENT_TYPE);
        startActivityForResult(it, 150, null);

    }

    @RequiresApi(api = Build.VERSION_CODES.O)
    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        if (requestCode == 201) {
            if (resultCode == RESULT_OK) {
                atualiza();
                Toast.makeText(this, "Salvo ", Toast.LENGTH_SHORT).show();
            } else {
                Toast.makeText(this, "Saiu", Toast.LENGTH_SHORT).show();
            }
        }
        if (requestCode == 150 && resultCode==RESULT_OK) {
            Uri uri = data.getData();
            String[] projecao =
                    {
//                            ContactsContract.CommonDataKinds.Phone.PHOTO_URI,
                            ContactsContract.CommonDataKinds.Phone.DISPLAY_NAME,
                            ContactsContract.CommonDataKinds.Phone.NUMBER,
//                            ContactsContract.CommonDataKinds.Phone.
//                            ContactsContract.CommonDataKinds.SipAddress.SIP_ADDRESS
                    };
            Cursor cursor = getContentResolver().query(uri, projecao, null, null, null);
            if (cursor != null && cursor.moveToFirst()){
                Contato contato = new Contato();
                //contato.setImagem(cursor.);
                contato.setNome(cursor.getString(0));
                contato.setNumTelefone(cursor.getString(1));
//                contato.setEmailContato(cursor.getString(2));
//                contato.setEnderecoContato(cursor.getString(3));
                Dados.salvar(contato);
                atualiza();
            }
        }
    }
}
