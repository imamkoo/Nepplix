export interface SharedPageProps {
    auth: {
        user: {
            id: number;
            name: string;
            email: string;
        } | null;
    };
}

export type PageProps<T extends Record<string, unknown> = Record<string, never>> =
    SharedPageProps & T;
