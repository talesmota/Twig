<?php

/* index/template.html */
class __TwigTemplate_b4dc30ba6ec193ce79fe0ea01e9d469702d3554046506412dbfd7de4198e37f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nomes"]) ? $context["nomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nome"]) {
            // line 4
            echo "\tNome: ";
            echo twig_escape_filter($this->env, (isset($context["nome"]) ? $context["nome"] : null), "html", null, true);
            echo "<br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index/template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
