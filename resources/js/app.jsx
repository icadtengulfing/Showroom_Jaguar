import "./bootstrap";
import { createRoot } from "react-dom/client";
import Hyperspeed from "./components/ui/hyperspeed";

// Mount Hyperspeed ke element #hyperspeed-bg
const bgElement = document.getElementById("hyperspeed-bg");
if (bgElement) {
    createRoot(bgElement).render(<Hyperspeed />);
}
