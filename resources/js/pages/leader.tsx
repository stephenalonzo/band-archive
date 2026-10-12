import { usePage } from "@inertiajs/react";
import { route } from 'ziggy-js';

interface Leaders {
    id: number,
    song_leader_name: string,
    className: string
}
interface getArchiveDate {
    id: number,
    archive_date: string
    leaders: Leaders[]
}
interface ArchiveProps {
    getArchiveDate: getArchiveDate[]
}

export default function Leader() {
    const { getArchiveDate } = (usePage().props as unknown) as ArchiveProps;

    function formatMonthYear(dateString: any) {
        if (!dateString) return '';

        const date = new Date(dateString);

        return new Intl.DateTimeFormat('en-US', {
            month: 'long', // Use 'short' for Oct, 'numeric' for 10
            year: 'numeric'
        }).format(date);
    }

    return (
        <>
            <div className="max-w-lg mx-auto p-4 space-y-6">
                <form className="mx-auto">
                    <div className="relative col-span-2">
                        <div className="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg className="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" className="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                        <button type="submit" className="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                <div>
                    <p>You are viewing a song leader!</p>
                </div>
            </div>
        </>
    );
}
