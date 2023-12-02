import { defineConfig } from "vite";
import { wordpress } from "wordpress-vite-plugin";

export default defineConfig({
  plugins: [
    wordpress({
      input: "src/main.ts",
      namespace: "theme-vite",
    }),
  ],
});
