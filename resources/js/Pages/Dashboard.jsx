import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import CampaignCard from '../Components/Campaign/CardPanel.jsx'
export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Panel</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12 flex justify-center">
  <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div className="bg-red-600 text-white font-bold text-center shadow-lg rounded-lg p-8">
      <h2 className="text-2xl uppercase">¡Cuidado!</h2>
      <p className="mt-2 text-lg">Esto es el TP3 de Framework e Interoperabilidad</p>
    </div>
  </div>

                <CampaignCard/>
            </div>
        </AuthenticatedLayout>
    );
}
