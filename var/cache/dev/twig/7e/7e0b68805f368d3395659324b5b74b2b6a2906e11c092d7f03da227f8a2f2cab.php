<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_620061507ae8dfeaaff9d74ca8d6a611f12dc714c98d836e9e9b3c4b8bf8960a extends Twig_Template
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
        $__internal_886193deac21f7b7f670decaf3a5f8de7a497d5fc1cb073c01c2f6c019a43f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886193deac21f7b7f670decaf3a5f8de7a497d5fc1cb073c01c2f6c019a43f7f->enter($__internal_886193deac21f7b7f670decaf3a5f8de7a497d5fc1cb073c01c2f6c019a43f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_24e027cdac3d2b6698891f4bc9c307a145e2d48a412709b845e841d6be291d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e027cdac3d2b6698891f4bc9c307a145e2d48a412709b845e841d6be291d5f->enter($__internal_24e027cdac3d2b6698891f4bc9c307a145e2d48a412709b845e841d6be291d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_886193deac21f7b7f670decaf3a5f8de7a497d5fc1cb073c01c2f6c019a43f7f->leave($__internal_886193deac21f7b7f670decaf3a5f8de7a497d5fc1cb073c01c2f6c019a43f7f_prof);

        
        $__internal_24e027cdac3d2b6698891f4bc9c307a145e2d48a412709b845e841d6be291d5f->leave($__internal_24e027cdac3d2b6698891f4bc9c307a145e2d48a412709b845e841d6be291d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
