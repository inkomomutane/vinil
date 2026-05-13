import type { NavItem } from '@/types';
import { GraduationCap, LayoutGrid, Users,ListCheck,ListChecks, FileText, DollarSign, CheckSquare } from 'lucide-vue-next';
import {t} from "@/lib/utils"

export const AppRoutes: NavItem[]  = [
    {
        title: t('Dashboard'),
        href: route('dashboard'),
        icon: LayoutGrid,
        routeName: 'dashboard',
        adminOnly: false,
    },
];
