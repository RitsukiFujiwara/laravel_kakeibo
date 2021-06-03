import React, { useState, useEffect } from "react";
import axios from "axios";

type Data = {
    id: number;
    month: number;
    category: string;
    detail: string;
    money: number;
    memo: string;
    created_at: Date;
    updated_at: Date;
};

const regist: React.VFC = () => {
    const [datas, setDatas] = useState<Data[]>([]);
    const getData = async () => {
        const { data } = await axios.get<Data[]>("api/money");
        setDatas(data);
    };
    useEffect(() => {
        getData();
    });
    return (
        <>
            <div>Hello</div>
            <ul>
                {datas.map((data) => (
                    <li key={data.id}>
                        <div>
                            <span>{data.category}</span>
                            <button className="btn is-edit">編集</button>
                            <button className="btn is-delete">削除</button>
                        </div>
                    </li>
                ))}
            </ul>
        </>
    );
};

export default regist;
