<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ac20f75799f38bd1c77e468d91d91e25a29aa28fdb058d64c64f6311bdd9e21b extends Twig_Template
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
        $__internal_b3f5e7b405b135f8f009968dffb629803f8c12fe7c138b84e664399462181926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f5e7b405b135f8f009968dffb629803f8c12fe7c138b84e664399462181926->enter($__internal_b3f5e7b405b135f8f009968dffb629803f8c12fe7c138b84e664399462181926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_afe57aa724704c1c8bd20b01097c50ecc6c697c7d3bcc5ef285967c164e5120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe57aa724704c1c8bd20b01097c50ecc6c697c7d3bcc5ef285967c164e5120f->enter($__internal_afe57aa724704c1c8bd20b01097c50ecc6c697c7d3bcc5ef285967c164e5120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b3f5e7b405b135f8f009968dffb629803f8c12fe7c138b84e664399462181926->leave($__internal_b3f5e7b405b135f8f009968dffb629803f8c12fe7c138b84e664399462181926_prof);

        
        $__internal_afe57aa724704c1c8bd20b01097c50ecc6c697c7d3bcc5ef285967c164e5120f->leave($__internal_afe57aa724704c1c8bd20b01097c50ecc6c697c7d3bcc5ef285967c164e5120f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
